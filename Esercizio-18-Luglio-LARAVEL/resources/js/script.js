const navbar = document.getElementById("navbar");//prendo il mio id associato nell'HTML


// Array delle Categorie
let category = [
    {
        text: "Smartphone",
        url: "#"
    },
    {
        text: "Tablet",
        url: "#"
    },
    {
        text: "Audio",
        url: "#"
    },
    
]

//creazione carosello dinamico
const carousel = document.getElementById("imgCarousel");

let img = [
    {
        url: "https://www.etisalat.ae/content/dam/dx_eitsalat_ae/en/images/iphone-13-pro-buy-en-1440x500_tcm313-290834.jpg"
    },
    {
        url: "https://www.netguru.com/hubfs/Codestories/arnel-hasanovic-4oWSXdeAS2g-unsplash.jpg"
    },
    {
        url: "https://edtechmagazine.com/higher/sites/edtechmagazine.com.higher/files/styles/cdw_hero/public/articles/%5Bcdw_tech_site%3Afield_site_shortname%5D/202211/HiEd_Q422_PS_Soto_hero.jpg?itok=1LrqDM_c"
    },
];

function dinamicCarousel(images) {


    images.forEach((img,index) => {

        const carouselItem = document.createElement("div")
        const imgItem = document.createElement("img");

    
        carouselItem.classList.add("carousel-item", "p-5")
        if (index === 0) {
            carouselItem.classList.add("active");
        }

        imgItem.classList.add("d-block", "w-100", "rounded-5");
        
        imgItem.setAttribute("src", img.url);

        carouselItem.appendChild(imgItem);

        carousel.appendChild(carouselItem)

    });
}

dinamicCarousel(img)