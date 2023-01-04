<?php

class Activity {
    public static $counter = 0;
    public $id; // Name of the activity
    public $name; // Name of the activity
    public $duration; // Duration of the activity
    public $dependencies; // Array of activities that this activity depends on
    public $es = 0; // Earliest start time
    public $ef; // Earliest finish time
    public $ls; // Latest start time
    public $lf; // Latest finish time
    public $slack; // Latest finish time
    public $critical = false; // Latest finish time

    public function __construct($name, $duration, $dependencies) {
        Activity::$counter = 1 + self::$counter++;
        $this->id = self::$counter;
        $this->name = $name;
        $this->duration = $duration;
        $this->dependencies = $dependencies;
    }
}

class Project
{
    public $activities; // Array of activities in the project
    public $srependencje; // Array of activities in the project

    public function __construct($activities)
    {
        $this->activities = $activities;
        $this->srependencje = [];
    }

    public function addActivity($activity){
        $this->activities[] = $activity;
    }

    public function getActivity($name){
        foreach ($this->activities as $activity) {
            if($activity->name == $name){
                return $activity;
            }
        }
    }


    // Compute the es and ls values for each activity
    public function computeCPM() {
        // Compute the es values for all activities
        foreach ($this->activities as $activity) {
            // generowanie siatki połączeń - kto z kim wstecznej?
            // For each dependency of this activity, find the maximum es value
            $maxDependencyEs = 0;
            foreach ($activity->dependencies as $dependency) {
                $this->srependencje[] = [$dependency->name, $activity->name];
                $dependencyEs = $dependency->es + $dependency->duration;
                if ($dependencyEs > $maxDependencyEs) {
                    $maxDependencyEs = $dependencyEs;
                }
            }

            // Set the es value for this activity to the maximum es value of its dependencies plus its own duration
            $activity->es = $maxDependencyEs;
            $activity->ef = $activity->es + $activity->duration;
        }

        // policzyć efy
        foreach (array_reverse($this->activities) as $activity) {
            $hasSreps = 0;
            $testvar = 99;
            foreach ($this->srependencje as $srependencja) {
                if($activity->name == $srependencja[0]){
                    $hasSreps++;
                    if($this->getActivity($srependencja[1])->ls < $testvar){
                        $testvar = $this->getActivity($srependencja[1])->ls;
                    }
                }
            }
            if($hasSreps > 0){
                $activity->lf = $testvar;
            } else {
                $activity->lf = $activity->ef;
            }
            $activity->ls = $activity->lf - $activity->duration;
        }

        // Compute the ls values for all activities $slack

        $projectDuration = 0;
        foreach ($this->activities as $activity) {
            $activity->slack = $activity->ls - $activity->es;
        }
    }

    // Calculate the critical path method for the project
    public function calculateCPM() {
        // Compute the es and ls values for each activity
        $this->computeCPM();
        // Find the activities with the longest duration
        $criticalPath = [];
        foreach ($this->activities as $activity) {
            if ($activity->slack == 0) {
                $criticalPath[] = $activity;
                $activity->critical = true;
            }
        }
        // Return the activities with the longest duration as the critical path
        return $criticalPath;
    }

}

