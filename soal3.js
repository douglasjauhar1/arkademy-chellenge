function sort(data) {
    var str = String(data)
    // console.log(str)
    var arr = []

    // inpit string jadikan array
    for (var a = 0; a < str.length; a++) {
        arr.push(str[a])
    }

    // sort array
    var temp = null
    for (var i = 0; i < arr.length - 1; i++) {
        for (var j = i + 1; j < arr.length; j++) {

            if (Number(arr[i]) > Number(arr[j])) {
                temp = arr[i]
                arr[i] = arr[j]
                arr[j] = temp
            }
        }
    }
    // jadikan string untuk di return
    let result = ''
    for (var i = 0; i < arr.length; i++) {
        result += arr[i]
    }
    return result
}

function proses(num) {
    let str = String(num)
    let arr = []
    let temp = ""
    let lempar = []

    for (var i = 0; i < str.length; i++) {
        // console.log(str[i])
        if (str[i] == '0') {
            // arr.push(Number(temp))
            arr.push(temp)
            temp = ''
        }
        if (i == str.length - 1) {
            temp += str[i]
            arr.push(temp)
        }
        if (str[i] !== '0') {

            temp += str[i]
        }
    }

    var final = ''
    for (var i = 0; i < arr.length; i++) {
        final += sort(arr[i])

    }

    return final
}
proses(5956560159466056)