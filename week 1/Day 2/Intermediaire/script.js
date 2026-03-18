//Exercice 1
function fusionProfonde(obj1,obj2){
    let obj3 ={}
    for(const [key1,value1] of obj1){
        for (const [key2,value2] of obj2){
            if (key1 == key2){
                if(typeof(value1)=="object"){
                    if(typeof(value2)=="object"){
                        
                    }
                }
            } else{

            }
        }
    }
   
}

fusionProfonde(
{ a:1, b:{ x:1, y:2 } },
{ b:{ y:99, z:3 }, c:4 }
) 