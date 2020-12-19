function getDrop(){
    var mapLocations = ['Dam','Military Base','Quarry','Airport','TV Station','Storage Town','Superstore','Boneyard','Train Station','Hospital','Downtown','Stadium','Lumber','Farmland','Prison (Gulag)','Port','Park','Promenade East','Promenade West','Hills','Boneyard - South','Boneyard - North','BONEYARD','Boneyard - Mid']
    var dropLocation = mapLocations[Math.floor(Math.random() * mapLocations.length)];
    document.getElementById("message").innerHTML=dropLocation;
}

function getHardo(){
    var mapLocations = ['Boneyard.']
    var dropLocation = mapLocations[Math.floor(Math.random() * mapLocations.length)];
    document.getElementById("message").innerHTML=dropLocation;
}

function getRebirthDrop(){
    var mapLocations = ['Security Area', 'Living Quarters', 'Construction Site', 'Factory', 'Headquarters', 'Prison Block', 'Shore', 'Decon Zone - South', 'Decon Zone - North', 'Harbor Warehouse', 'Chemical Eng. Factory', 'Bioweapons Labs', 'Bio weapons Jetty', 'Chemical Eng. Office', 'Water Tower', 'Power Room', 'Rec Yard', 'Rec Yard Terrace', 'Chemical Eng. South  Power Station', 'Prison Block Basement', 'Wardens Entrance - South Prison Block', 'Harbor Office', 'Construction Site Jetty', 'Survey Tower - HQ', 'HQ Garrison', 'HQ Staircase and Garden', 'Factory Docks', 'Base Camp', 'Living Quarters Row', 'Factory South', 'Living Quarters Switchbacks', 'Security Area Comms', 'Security Area Watchtower' ];
    var dropLocation = mapLocations[Math.floor(Math.random() * mapLocations.length)];
    document.getElementById("rebirthMessage").innerHTML=dropLocation;
}
