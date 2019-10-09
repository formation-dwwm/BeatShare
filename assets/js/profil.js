require('../css/profil.css');

// AJAX Function to delete the song.
// It selects the id of the song then sends it to the server to make the request
let beat = document.getElementsByClassName('beat-personnal');

let json = {};

for(let i = 0; i < beat.length; i++){

    let attr = beat[i].getAttribute('data-beat-id');

        beat[i].addEventListener('click', (e) => {
        
            if(e.target.tagName != 'BUTTON')
                return;

            else
                json.id = attr; 
        });

    let deleteBeat = document.getElementById(attr);
  

        deleteBeat.addEventListener('click', (test) => {

            let initHeader = {
                'Content-Type': 'application/json',
            }

            let header = new Headers();

            let initReq = {
                headers : header,
                method: 'POST',
                body: JSON.stringify(json),
            }

         

            fetch('http://127.0.0.1:8000/remove-beat', initReq)

            .then(function(res) {
                location.reload();
               
            })
            
            .catch(function(err) {
               
            })
        });
   
}