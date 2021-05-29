/*** My favorite ***/

const addToFavorite = document.getElementById('add-to-favorite');


if(addToFavorite !== null){

    addToFavorite.addEventListener('click', function(){

        //Array for duplicate checking
        const duplicateCheck = JSON.parse(localStorage.getItem('duplicateCheck')) || []; //Array for duplicate checking
        const favoriteArr = JSON.parse(localStorage.getItem('favoriteArr')) || []; 
        const getDataFromFavoriteArr = JSON.parse(localStorage.getItem("favoriteArr"));
        const postId = this.getAttribute('data-post-id');

        let postObj = {

            'postId': this.getAttribute('data-post-id'),
            'postTitle': this.getAttribute('data-post-title'),
            'postUrl': this.getAttribute('data-post-url'),
            'postException': this.getAttribute('data-post-exception')
        }

        if(duplicateCheck !== null && duplicateCheck.includes(postId)){
            let duplicateAlert = document.querySelector('.duplicate-alert');
            if(duplicateAlert !== null){
                duplicateAlert.classList.add('active');
                setTimeout(function(){ duplicateAlert.classList.remove('active'); }, 1500);
            }
        }else{

            duplicateCheck.push(postId);
            localStorage.setItem("duplicateCheck", JSON.stringify(duplicateCheck));
    
            favoriteArr.push(postObj);
            localStorage.setItem('favoriteArr', JSON.stringify(favoriteArr));
    
            let countValue = document.getElementById('count-value');
            let singleHeart = document.getElementById('single-heart');
            let favoriteCounterContent = "";
    
            favoriteCounterContent += favoriteArr.length;
            countValue.classList.add('active');
            singleHeart.classList.add('active');
            countValue.innerHTML = favoriteCounterContent;
        }
        
    });
}


/** Display on Favorite Page **/

//const displayFavor = JSON.parse(localStorage.getItem("favoriteArr"));

const displayFavor = JSON.parse(localStorage.getItem("favoriteArr"));

let favoriteHtml="";
let postTitle;
let postUrl;
let postException

//Function for updating Favorite Count
function updateCounter(arrLength){
    let countValue = document.getElementById('count-value');
    let singleHeart = document.getElementById('single-heart');
    let favoriteCounterContent = "";
    favoriteCounterContent += arrLength;
    if(arrLength !== 0){
        countValue.classList.add('active');
        if(singleHeart !== null){
            singleHeart.classList.add('active');
        }
    }else{
        countValue.classList.remove('active');
        if(singleHeart !== null){
            singleHeart.classList.remove('active');
        } 
    }
    countValue.innerHTML = favoriteCounterContent;
}


if(displayFavor.length > 0){

    let favoriteList = document.getElementById('favorite-list');

    for(item in displayFavor){ 
        favoriteHtml += 
            '<div class="article-item"> <div class="article-item__content">'
            +'<h2><a href="'+ displayFavor[item].postUrl +'">"'+ displayFavor[item].postTitle +'"</a></h2>'
            +'<p>' + displayFavor[item].postException + '</p>'
            +'<button data-item="'+ item +'" class="remove-favorite" type="button"><i class="far fa-trash-alt"></i></button>'
            +'<a class="read-more" href="'+ displayFavor[item].postUrl +'">Read more</a>'
            +'</div> </div>';

        if(favoriteList !== null){
            favoriteList.innerHTML = favoriteHtml;
        }     
    }
    
    updateCounter(displayFavor.length);

}else{
    let nothingFavorite = "";
    let noFavoriteAlert = document.getElementById('no-favorite');

    if( noFavoriteAlert !== null){
        nothingFavorite +=
        '<h2 class="nothing-favorite">Sorry, but you haven\'t added anything to your favorite list yet.</h2>'
        +'<div class="got-to-tutorials">'
        +'<a class="read-more" href="/vicso/">Tutorials<a>'
        +'</div>';
        noFavoriteAlert.innerHTML = nothingFavorite;
    }  
}

/* Remove from Favorite */

const removeItem = document.querySelectorAll('.remove-favorite');

if(removeItem !== null){
    removeItem.forEach(item=>{
        item.addEventListener('click', function(){

            this.closest('.article-item').style.display='none';
            let dataItem =  this.getAttribute('data-item');
            let removeFromDublicat = JSON.parse(localStorage.getItem('duplicateCheck'));
            let removeFromArr = JSON.parse(localStorage.getItem('favoriteArr'));

            removeFromArr.splice(dataItem, 1);
            removeFromDublicat.splice(dataItem, 1);
            localStorage.setItem("favoriteArr",JSON.stringify(removeFromArr));
            localStorage.setItem("duplicateCheck",JSON.stringify(removeFromDublicat));

            updateCounter(removeFromArr.length)
            
        });

    });
}




/*** My favorite END ***/