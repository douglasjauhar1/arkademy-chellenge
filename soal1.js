function myBiodata() {
    let biodataObj = {
        "name": 'Muhammad Douglas Jauhar Nehru',
        "age": 21,
        "address": 'Jl. Raya Jegles no.46 Blabak Pesantren Kediri',
        "hobbies": [
            'Ngoding', 'Desain', 'Minum Kopi', 'Hiking'
        ],
        "is_married": false,
        "list_school": [{
            "SMP A. WAHID HASYIM TEBUIRENG": "2011-2014",
            "SMA A. WAHID HASYIM TEBUIRENG": "2014-2017",
            "Major": null
        }],
        "skills": [
            {
                "HTML5": "Advanced",
                "CSS": "Advanced",
                "Javascript": "Advanced",
                "ReactJS": "Beginner",
                "Bootstrap": "Advanced",
                "PHP": "Advanced",
                "MySQL": "Advanced",
                "Python": "Beginner"
            }
        ],
        "intersted_in_coding": true,
    }

    return biodataObj
}
console.log(myBiodata('douglas, 21'));