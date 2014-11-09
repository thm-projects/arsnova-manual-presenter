require(["dojo/query", "arsnova-presenter/ui/chart/jittAnswers"],
 function (query, chart) {
   var countNodes = query("#jittAnswersCount .answerCount");
   countNodes[0].textContent = 93; // 1st answer count number
   if (countNodes.length > 1) {
     countNodes[1].textContent = 105; // 2nd answer count number
   }
   chart.update(
     [
       {value: 1, text: "a selection of k elements from a group of n elements without respecting the order
"},
       {value: 2, text: "a selection of k elements from a group of n elements with respecting the order
"},
               {value: 3, text: "n/a
"},

     ],
     [1], // indexes of correct options
     {"PI round 1": [77, 25]},
     true, // percentage values?
     true // abstentions allowed?
   );
});