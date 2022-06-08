function abbreviateNumber(value) {
    var newValue = value;
    if (value == "Infinity"){
        return "Infinity"
    }
    if (value >= 1000) {
        var suffixes = ["","K","M","B","T","Qa","Qi","Sx","Sp","Oc","No",
                        "De","UDe","DDe","TDe","QaDe","QiDe","SxDe","SpDe","OcDe","NoDe",
                        "Vg","UVg","DVg","TVg","QaVg","QiVg","SxVg","SpVg","OcVg","NoVg",
                        "Tg","UTg","DTg","TTg","QaTg","QiTg","SxTg","SpTg","OcTg","NoTg",
                        "Qag","UQag","DQag","TQag","QaQag","QiQag","SxQag","SpQag","OcQag","NoQag",
                        "Qig","UQig","DQig","TQig","QaQig",'QiQig',"SxQig","SpQig","OcQig","NoQig",
                        "Sxg","USxg","DSxg","TSxg","QaSxg","QiSxg","SxSxg","SpSxg","OcSxg","NoSxg",
                        "Spg","USpg","DSpg","TSpg","QaSpg","QiSpg","SxSpg","SpSpg","OcSpg","NoSpg",
                        "Ocg","UOcg","DOcg","TOcg","QaOcg","QiOcg","SxOcg","SpOcg","OcOcg","NoOcg",
                        "Nog","UNog","DNog","TNog","QaNog","QiNog","SxNog","SpNog","OcNog","NoNog",
                        "Ct","UCt"];
        var suffixNum = Math.floor( Math.log10(value)/3 );
        var shortValue = '';
        for (var precision = 2; precision >= 1; precision--) {
            shortValue = parseFloat( (suffixNum != 0 ? (value / Math.pow(1000,suffixNum) ) : value).toPrecision(precision));
            var dotLessShortValue = (shortValue + '').replace(/[^a-zA-Z 0-9]+/g,'');
            if (dotLessShortValue.length <= 2) { break; }
        }
        if (shortValue % 1 != 0)  shortValue = shortValue.toFixed(1);
        newValue = shortValue+suffixes[suffixNum];
    }
    return newValue;
}