'use strict'
    var page = require('webpage').create();
    var system = require('system'),
        address;

    if(system.args.length === 1) {
        console.log("Invalid domain input");
        phantom.exit(1);
    } else {
        address = system.args[1];
        page.open(address, function() {
            setTimeout(function(){
                console.log(page.render(address + ".png"));
                phantom.exit();
            },2000)
          });
    }