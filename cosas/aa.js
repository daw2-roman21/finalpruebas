htmlPre += `

	<div class="tarjeta2 " data-tilt data-tilt-scale="1.15"><a href="${tweets.url
    }" class="linkTweet" target="_blank">
						
						<h2>${tweets.hashtag
    }</h2>
						<div class="row">
						<div class="multimedia">
${imagen} 
						</div>
						<div class="contenido">
						
						
<h3>@${tweets.usuario
    }</h3>
						</div>
						<div class="contenido">
							
							<p>${tweets.texto
    }</p>
						</div>
						</div>
					</div></a></div>
					`;
})