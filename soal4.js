var input = [{
    name: "Movies", info: "category_name",
    data: [
        { name: "Interstellar", info: "category_data" },
        { name: "Dark Knight", info: "category_data" },
    ]
},
{
    name: "Music", info: "category_name",
    data: [
        { name: "Adams", info: "category_data" },
        { name: "Nirvana", info: "category_data" },
    ]
}
]
function newArray(arr) {

    let result = []
    for (var i = 0; i < arr.length; i++) {
        // console.log(arr[i].name)
        result.push({ 'name': arr[i].name, 'info': arr[i].info })
        for (var j = 0; j < arr[i].data.length; j++) {
            // console.log(arr[i].data[j])
            result.push(arr[i].data[j])
        }
    }
    return result
}
newArray(input)
// console.log(input)