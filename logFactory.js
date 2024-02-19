export function detailsAdd (logs){
    
    var insertIn = logs || [];


    function storeDetails (added){
        if (added.length){
            if(!insertIn.includes(added)){
                insertIn.push(added)
                return true
            }else {
                return false
            }
        }
    }

    function getDetails (){
        return insertIn
    }



    return{
        storeDetails,
        getDetails,
    }
}