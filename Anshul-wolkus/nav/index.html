<!DOCTYPE html>

<html lang="en">
<head>    
    <link rel="stylesheet" href="style.css">
 
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
   
</head>
<body>

    <nav class="sidebar close">
            <header>
            <div class="image-text">
                <span class="image">
                  
                  <p><?php 
                  session_start();
                  echo($_SESSION['name'])?></p>
                </span>

            </div>

        </header>

        <div class="menu-bar">
            <div class="menu">

          

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                   <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="user.php">
                      <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>


                
            </div>
        </div>

    </nav>

    <section class="home">
            <li class="search-box">
                   
                   <input type="text" class="ok"placeholder="Search for a movie">
              <button type="submit" value="Submit" class="bn9">Search</button>
                </li>
        <div class="poster">

</div>
    </section>


    <script> 
      const im=document.querySelector('.poster');
const searchInput=document.querySelector('.ok');

const se=document.querySelector('.bn9');
se.onclick=()=> {
fetch(`https://www.omdbapi.com/?s=${searchInput.value.trim()}&apikey=e668e570`).then(function (res) {

        return res.json();
    }).then(function (data) {


    const movies = data.Search;

    movies.forEach((movie) => {
         fetch(`https://www.omdbapi.com/?i=${movie.imdbID}&apikey=e668e570`).then((rest)=> {

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
    </script>

</body>
</html>
