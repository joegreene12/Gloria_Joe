window.addEventListener("load", function() {
   var reply = document.querySelectorAll('.replyLink');
    /* This creates a non-live nodelist called reply that has all
        the elements with class="replyPost". It is array-like so
        the individual elements are referenced by indexes. */
    
    
    /* In order to get to the index of the element being clicked, 
       we're going to use a for loop. */
    
    for (var i=0; i < reply.length; i++) {
        reply[i].addEventListener("click", function() {
            var replyNum = this.getAttribute('data-indices');
            /* The first element with the attribute data-indices 
               is assigned to the variable replyNum so it can be 
               manipulated. */
            
            document.getElementById('replyPost' + replyNum).style.display = 'block'
        });
    }
});