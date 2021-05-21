
document.addEventListener("DOMContentLoaded", () => {
    $("#modal").modal({
        backdrop: "static", //remove ability to close modal with click
        keyboard: false, //remove option to close with keyboard
        show: true //Display loader!
    });
    $.get("/alejandro-roman-final/public/tweet", {
        "data": {
            "hashtag": document.getElementById("hashtag").value,
            "juego": document.getElementById("juego").value
        }
    }, function (tweets) {

        twitter = Array.from(JSON.parse(tweets));
        var htmlPre = "";
        twitter.forEach(tweets => {
            idTweet = (tweets.idTweet);
            guardar = "";
            if (document.getElementById("user") !== null) {
                guardar = `<a class="guardarTweet" rel="nofollow noopener" onclick="guardarTweet('${tweets.idTweet}')"><i class="far fa-save"> Save</i></a>
                `;
            } else {
                guardar = `<a class="guardarTweet" rel="nofollow noopener" href="/alejandro-roman-final/public/login">Login to save</a>
                `;
            }
            imagen = "";
            if (tweets.imagen != null) {
                imagen = `<img src='${tweets.imagen
                    }' class='imagenTweet img-fluid'/>`;
            }
            video = "";
            if (tweets.video != null) {
                imagen = "";
                video = `
                <video controls="true" class="embed-responsive-item videoTweet">
                  
                  <source src="${tweets.video}" type="video/mp4" />
                </video>
            `
            }
            if (document.getElementById(`${tweets.idTweet
                }`) == null) {
                htmlPre += `
                
                    <div class="tarjeta2 col-12" id="${tweets.idTweet}">
                    <div>
                        <h2>#${tweets.hashtag}</h2>
                        <div class="multimedia">
                            ${imagen} 
                            ${video}
                        </div>
                        <div class="contenido">
                            <h3>@${tweets.usuario}</h3>
                        </div>
                        
                        <div class="contenido">
                            <p>${tweets.texto}</p>
                        </div>
                       <a class="botonLink" href="${tweets.url}" target="_blank" rel="nofollow noopener">Go to the tweet</a>  
                        ${guardar}
                       </div>
                       </div>                 
                    `;
            }
        })
        document.getElementById("tweets").innerHTML = htmlPre + document.getElementById("tweets").innerHTML;
        $("#modal").modal("hide");
    });
})

function guardarTweet(idTweet) {


    $.post("/alejandro-roman-final/public/guardarTweet", {
        "data": idTweet
    }, function (r) {
        if (r === "Tweet Insertado") {
            alertify.success('Tweet Saved');
        } else {
            alertify.error('The tweet was already saved');
        }
    })
}

