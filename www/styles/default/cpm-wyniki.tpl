{include file="header.tpl"}
<script src="https://unpkg.com/gojs@2.2.21/release/go.js"></script>

<h2 class="w3-xxxlarge w3-text-red">Wyniki</h2>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <div id="allSampleContent" class="p-4 w-full">
  </div>

<script id="code">
    function init() {

        // Since 2.2 you can also author concise templates with method chaining instead of GraphObject.make
        // For details, see https://gojs.net/latest/intro/buildingObjects.html
        const $ = go.GraphObject.make;  // for more concise visual tree definitions

        // colors used, named for easier identification
        var blue = "#0288D1";
        var pink = "#B71C1C";
        var pinkfill = "#F8BBD0";
        var bluefill = "#B3E5FC";

        myDiagram =
            $(go.Diagram, "myDiagramDiv",
                {
                    initialAutoScale: go.Diagram.Uniform,
                    layout: $(go.LayeredDigraphLayout)
                });

        // The node template shows the activity name in the middle as well as
        // various statistics about the activity, all surrounded by a border.
        // The border's color is determined by the node data's ".critical" property.
        // Some information is not available as properties on the node data,
        // but must be computed -- we use converter functions for that.
        myDiagram.nodeTemplate =
            $(go.Node, "Auto",
                $(go.Shape, "Rectangle",  // the border
                    { fill: "white", strokeWidth: 2 },
                    new go.Binding("fill", "critical", b => b ? pinkfill : bluefill),
                    new go.Binding("stroke", "critical", b => b ? pink : blue)),
                $(go.Panel, "Table",
                    { padding: 0.5 },
                    $(go.RowColumnDefinition, { column: 1, separatorStroke: "black" }),
                    $(go.RowColumnDefinition, { column: 2, separatorStroke: "black" }),
                    $(go.RowColumnDefinition, { row: 1, separatorStroke: "black", background: "white", coversSeparators: true }),
                    $(go.RowColumnDefinition, { row: 2, separatorStroke: "black" }),
                    $(go.TextBlock, // earlyStart
                        new go.Binding("text", "earlyStart"),
                        { row: 0, column: 0, margin: 5, textAlign: "center" }),
                    $(go.TextBlock,
                        new go.Binding("text", "length"),
                        { row: 0, column: 1, margin: 5, textAlign: "center" }),
                    $(go.TextBlock,  // earlyFinish
                        new go.Binding("text", "",
                            d => (d.earlyStart + d.length).toFixed(2)),
                        { row: 0, column: 2, margin: 5, textAlign: "center" }),

                    $(go.TextBlock,
                        new go.Binding("text", "text"),
                        {
                            row: 1, column: 0, columnSpan: 3, margin: 5,
                            textAlign: "center", font: "bold 14px sans-serif"
                        }),

                    $(go.TextBlock,  // lateStart
                        new go.Binding("text", "",
                            d => (d.lateFinish - d.length).toFixed(2)),
                        { row: 2, column: 0, margin: 5, textAlign: "center" }),
                    $(go.TextBlock,  // slack
                        new go.Binding("text", "",
                            d => (d.lateFinish - (d.earlyStart + d.length)).toFixed(2)),
                        { row: 2, column: 1, margin: 5, textAlign: "center" }),
                    $(go.TextBlock, // lateFinish
                        new go.Binding("text", "lateFinish"),
                        { row: 2, column: 2, margin: 5, textAlign: "center" })
                )  // end Table Panel
            );  // end Node

        // The link data object does not have direct access to both nodes
        // (although it does have references to their keys: .from and .to).
        // This conversion function gets the GraphObject that was data-bound as the second argument.
        // From that we can get the containing Link, and then the Link.fromNode or .toNode,
        // and then its node data, which has the ".critical" property we need.
        //
        // But note that if we were to dynamically change the ".critical" property on a node data,
        // calling myDiagram.model.updateTargetBindings(nodedata) would only update the color
        // of the nodes.  It would be insufficient to change the appearance of any Links.
        function linkColorConverter(linkdata, elt) {
            var link = elt.part;
            if (!link) return blue;
            var f = link.fromNode;
            if (!f || !f.data || !f.data.critical) return blue;
            var t = link.toNode;
            if (!t || !t.data || !t.data.critical) return blue;
            return pink;  // when both Link.fromNode.data.critical and Link.toNode.data.critical
        }

        // The color of a link (including its arrowhead) is red only when both
        // connected nodes have data that is ".critical"; otherwise it is blue.
        // This is computed by the binding converter function.
        myDiagram.linkTemplate =
            $(go.Link,
                { toShortLength: 6, toEndSegmentLength: 20 },
                $(go.Shape,
                    { strokeWidth: 4 },
                    new go.Binding("stroke", "", linkColorConverter)),
                $(go.Shape,  // arrowhead
                    { toArrow: "Triangle", stroke: null, scale: 1.5 },
                    new go.Binding("fill", "", linkColorConverter))
            );


        var nodeDataArray = [];
        {foreach from=$aktywnosci key=key item=set}
        var thisVal = false;
        if('{$set['critical']}' == 1){
            thisVal = true;
        }
        nodeDataArray.push({ key: {$set['key']}, text: "{$set['text']}", length: {$set['length']}, earlyStart: {$set['earlyStart']}, lateFinish: {$set['lateFinish']}, critical: thisVal })
        {/foreach}

        console.log(nodeDataArray)

        var linkDataArray = [];
        {foreach from=$kolejnosc key=key item=set}
        linkDataArray.push({ from: {$set[0]}, to: {$set[1]} })
        {/foreach}

        console.log(linkDataArray)

        myDiagram.model = new go.GraphLinksModel(nodeDataArray, linkDataArray);

        // create an unbound Part that acts as a "legend" for the diagram
        myDiagram.add(
            $(go.Node, "Auto",
                $(go.Shape, "Rectangle",  // the border
                    { fill: bluefill }),
                $(go.Panel, "Table",
                    $(go.RowColumnDefinition, { column: 1, separatorStroke: "black" }),
                    $(go.RowColumnDefinition, { column: 2, separatorStroke: "black" }),
                    $(go.RowColumnDefinition, { row: 1, separatorStroke: "black", background: bluefill, coversSeparators: true }),
                    $(go.RowColumnDefinition, { row: 2, separatorStroke: "black" }),
                    $(go.TextBlock, "Early Start",
                        { row: 0, column: 0, margin: 5, textAlign: "center" }),
                    $(go.TextBlock, "Length",
                        { row: 0, column: 1, margin: 5, textAlign: "center" }),
                    $(go.TextBlock, "Early Finish",
                        { row: 0, column: 2, margin: 5, textAlign: "center" }),

                    $(go.TextBlock, "Activity Name",
                        {
                            row: 1, column: 0, columnSpan: 3, margin: 5,
                            textAlign: "center", font: "bold 14px sans-serif"
                        }),

                    $(go.TextBlock, "Late Start",
                        { row: 2, column: 0, margin: 5, textAlign: "center" }),
                    $(go.TextBlock, "Slack",
                        { row: 2, column: 1, margin: 5, textAlign: "center" }),
                    $(go.TextBlock, "Late Finish",
                        { row: 2, column: 2, margin: 5, textAlign: "center" })
                )  // end Table Panel
            ));
    }
    window.addEventListener('DOMContentLoaded', init);
</script>

<div id="myDiagramDiv" style="border: 1px solid black; width: 100%; height: 400px; position: relative;"><canvas tabindex="0" style="position: absolute; top: 0px; left: 0px; z-index: 2; user-select: none; touch-action: none; width: 1054px; height: 398px;" width="1054" height="398">This text is displayed if your browser does not support the Canvas HTML element.</canvas><div style="position: absolute; overflow: auto; width: 1054px; height: 398px; z-index: 1;"><div style="position: absolute; width: 1px; height: 1px;"></div></div></div>


<!-- End page content -->
{include file="footer.tpl"}