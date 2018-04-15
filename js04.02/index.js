var arr = [1, 2, [3,4,5, [6, 7,8], 9], 10, [11, 12]];
var newArr = [];

function flaten (newArr,arr) {

    for (var i = 0; i < arr.length; i++) {
        if (Array.isArray(arr[i])) {
            for (var j = 0; j < arr[i].length; j++) {
                if (Array.isArray(arr[i][j])) {
                    for (var x = 0; x < arr[i][j].length; x++) {
                        newArr.push(arr[i][j][x]);
                    }
                } else {
                    newArr.push(arr[i][j]);
                }
            }
        } else {
            newArr.push(arr[i]);
        }
    }
    return newArr;
}

console.log (flaten (newArr,arr));
