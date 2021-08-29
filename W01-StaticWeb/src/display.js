const content = document.getElementById("content");

const searchParam = window.location.search;
const urlParam = new URLSearchParams(searchParam);

const book = data.books[urlParam.get("index")]

function showBook(book) {
    const myArticle = document.createElement('article');
    const penulis = document.createElement('p');
    const penerbit = document.createElement('p');
    const penyunting = document.createElement('p');
    const penerjemah = document.createElement('p');
    const judulasli = document.createElement('p');
    const penerbitasli = document.createElement('p');


    if (book.deskripsi.penulis){
        penulis.textContent= 'Penulis : ' + book.deskripsi.penulis;
        myArticle.appendChild(penulis);
    }
    if (book.deskripsi.penerbit){
        penerbit.textContent= 'Penerbit : ' + book.deskripsi.penerbit;
        myArticle.appendChild(penerbit);
    }
    if (book.deskripsi.penyunting){
        penyunting.textContent= 'Penyunting : ' + book.deskripsi.penyunting;
        myArticle.appendChild(penyunting);
    }
    if (book.deskripsi.penerjemah){
        penerjemah.textContent= 'Penerjemah : ' + book.deskripsi.penerjemah;
        myArticle.appendChild(penerjemah);
    }
    if (book.deskripsi["judul-asli"]){
        judulasli.textContent= 'Judul asli : ' + book.deskripsi["judul-asli"];
        myArticle.appendChild(judulasli);
    }
    if (book.deskripsi["penerbit-asli"]){
        penerbitasli.textContent= 'Penerbit asli : ' + book.deskripsi["penerbit-asli"];
        myArticle.appendChild(penerbitasli);
    }

    content.appendChild(myArticle);
}

showBook(book);