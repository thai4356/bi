if ("localStorage" in window && window["localStorage"] !== null){
        console.log("Trinh duyet co ho tro");
        localStorage.setItem("class","T2210E");
        var className = localStorage.getItem("class");
        console.log("class name is " + className);
    }




