
export function MyCart(select){
    var items = select || [];

    function puttingItems(stock){
        if(!items.includes(stock)){
            items.push(stock)
        }else {
            return
        }
    }


    function search(product){
        if(product === items){
            return product;
        }else{
            return [];
        }
    }

    function theCounter(){
        return items.length;
    }

    function getItems(){
        return items;
    }


    return {
        puttingItems,
        search,
        theCounter,
        getItems
    }
}