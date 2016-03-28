window.addEventListener("load", function() {
   var reply = document.querySelectorAll('.replyLink');
    /* This creates a non-live nodelist called reply that has all
        the elements with class="replyPost". It is array-like so
        the individual elements are referenced by indexes. */
    
    var order = 0;
    
    /* In order to get to the index of the element being clicked, 
       we're going to use a for loop. */
    
    for (var i=0; i < reply.length; i++) {
        reply[i].addEventListener("click", function() {
            
            order = this.getAttribute('data-indices')

            var links = document.getElementById('replyPost' + order);
            links.toggle();            
            /* This code refers to the toggle.js file and toggles
               between display = none and display = block */
        });
    }
});