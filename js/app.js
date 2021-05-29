/*** My favorite ***/

const addToFavorite = document.getElementById('add-to-favorite');

if(addToFavorite !== null){

    addToFavorite.addEventListener('click', function(){
        
        let favoriteArr = JSON.parse(localStorage.getItem('favoriteArr')) || [];
        let getDataFromFavoriteArr = JSON.parse(localStorage.getItem("favoriteArr"));
        let modelId = this.getAttribute('data-post-id');

        let postObj = {

            'postId': this.getAttribute('data-post-id'),
            'postTitle': this.getAttribute('data-post-title'),
            'postUrl': this.getAttribute('data-post-url'),
            'postException': this.getAttribute('data-post-exception')
        }

        if(getDataFromFavoriteArr !==null && getDataFromFavoriteArr.includes(modelId)){
            alert('You have added this item to your favorite already.');
        }else{
            favoriteArr.push(postObj);
            localStorage.setItem('favoriteArr', JSON.stringify(favoriteArr));
        }        

    });
}


/*** My favorite END ***/