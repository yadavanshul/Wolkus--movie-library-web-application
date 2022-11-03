const im=document.querySelector('.poster');
const searchInput=document.querySelector('.ok');

const se=document.querySelector('.bn9');
se.onclick=()=> {
fetch(`https://www.omdbapi.com/?s=${searchInput.value.trim()}&apikey=ff8e1dd9`).then(function (res) {
  
        return res.json();
    }).then(function (data) {


    const movies = data.Search;

    movies.forEach((movie) => {
         fetch(`https://www.omdbapi.com/?i=${movie.imdbID}&apikey=ff8e1dd9`).then((rest)=> {

            return rest.json();
        }).then((dat)=>{
            const arr=[dat];
             const post=arr[0].Poster;
             const title=arr[0].Title;
             const imdb=arr[0].imdbRating;
             const plot=arr[0].Plot;
             const duration=arr[0].Runtime;
             const gen=arr[0].Genre;


             console.log(dat);
             im.innerHTML+=`<div class="card">
      <img src="${post}" alt="Lago di Braies">

    
      <div class="card__details">


        <span class="tag">${duration}</span>

        <span class="tag">${imdb}</span>
        <span class="tag">${gen}</span>

        
        <div class="name">${title}</div>

        <p>${plot}</p>

       
      </div>`
        });


    });
  });
}