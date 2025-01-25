// donnÃ©es des activitÃ©s
/*
const activities = [
    {
        id: 1,
        name: "Yoga",
        description: "Retrouver votre Ã©quilibre intÃ©rieur avec nos sÃ©ances de yoga apaisantes",
        image: "ressources/yoga.png",
        level: "DÃ©butant",
        coach: "AmÃ©lie",
        schedule_day: "Lundi",
        schedule_time: "10h - 11h",
        location: "IntÃ©rieur",
    },
    {
        id: 2,
        name: "Calisthenic",
        description: "Renforcez votre corps avec des exercices au poids du corps puissants et dynamiques.",
        image: "ressources/calisthenic.png",
        level: "Tous niveaux",
        coach: "Lucas",
        schedule_day: "Mardi",
        schedule_time: "18h - 19h",
        location: "ExtÃ©rieur",
    },
    {
        id: 3,
        name: "Natation",
        description: "Plongez dans la santÃ© et la vitalitÃ© grÃ¢ce Ã  nos cours de natation adaptÃ©s Ã  tous les niveaux.",
        image: "ressources/natation.png",
        level: "IntermÃ©diaire",
        coach: "Nina",
        schedule_day: "Mercredi",
        schedule_time: "14h - 15h",
        location: "IntÃ©rieur",
    },
    {
        id: 4,
        name: "Sports AÃ©riens",
        description: "Volez vers de nouvelles sensations avec nos sports aÃ©riens exaltants.",
        image: "ressources/aerien.png",
        level: "Expert",
        coach: "Paul",
        schedule_day: "Jeudi",
        schedule_time: "16h - 17h",
        location: "ExtÃ©rieur",
    },
    {
        id: 5,
        name: "KaratÃ©",
        description: "DÃ©veloppez votre discipline et vos compÃ©tences en arts martiaux.",
        image: "ressources/karate.png",
        level: "Tous niveaux",
        coach: "Sensei Hiro",
        schedule_day: "Mardi",
        schedule_time: "18h - 19h30",
        location: "IntÃ©rieur",
    },
    {
        id: 6,
        name: "Course Ã  pied",
        description: "AmÃ©liorez votre endurance et dÃ©couvrez le plaisir de courir en plein air.",
        image: "ressources/running.png",
        level: "Tous niveaux",
        coach: "Sensei Hiro",
        schedule_day: "Dimanche",
        schedule_time: "8h - 9h",
        location: "ExtÃ©rieur",
    }
];
*/

const activities = [
    {
        id: 1,
        name: "Soccer",
        description: "Vous aimez courir, la compétition et le travail d'équipe ? Alors le soccer est fait pour vous !",
        image: "/Images/soccer.webp",
        level: "expert",
        coach: "Coach Messi",
        schedule_day: "Jeudi",
        schedule_time: "18:00",
        location: "exterieur",
    },
    {
        id: 2,
        name: "Basketball",
        description: "Si vous aimez les principes du soccer mais vous cherchez une autre alternative, alors vous pourriez aimer le basketball.",
        image: "/Images/basketball.webp",
        level: "debutant",
        coach: "Coach Lebron",
        schedule_day: "Lundi",
        schedule_time: "10:00",
        location: "interieur",
    },
    {
        id: 3,
        name: "Course à pied",
        description: "Parfaite pour ceux qui souhaitent se maintenir en forme, renforcer leur endurance et évacuer leur stress.",
        image: "/Images/course_a_pied.webp",
        level: "intermediaire",
        coach: "Coach Yassine",
        schedule_day: "Mercredi",
        schedule_time: "07:00",
        location: "exterieur",
    },
    {
        id: 4,
        name: "Musculation",
        description: "Idéal pour renforcer vos muscles, améliorer votre forme générale ainsi que votre estime de soi.",
        image: "/Images/musculation.webp",
        level: "intermediaire",
        coach: "Coach Yassine",
        schedule_day: "Vendredi",
        schedule_time: "16:00",
        location: "interieur",
    },
    {
        id: 5,
        name: "Zumba",
        description: "Améliorez votre condition physique tout en vous amusant avec nos cours de Zumba.",
        image: "/Images/zumba.webp",
        level: "debutant",
        coach: "Coach Yassine",
        schedule_day: "Lundi",
        schedule_time: "18:00",
        location: "exterieur",
    },
];


function init() {
    
}

// affiche les activitÃ©s populaires pour la page d'accueil
function displayPopularActivities() 
{
    const container = document.getElementById("activite-populaire-Container");

    if (!container) 
    {
        return;
    }
    container.innerHTML = "";

    for (let i = 0; i < 4; i++) 
    {
        const newfigure = document.createElement("figure");
        const titreFigcaption = document.createElement("figcaption");
        const titre = document.createElement("h3");

        titre.innerText = activities[i].name;
        titreFigcaption.appendChild(titre);

        const image = document.createElement("img");
        image.src = activities[i].image;
        image.alt = "PHOTO";
        image.width = 250;
        image.height = 250;
        image.classList.add("image");

        const descrFigcaption = document.createElement("figcaption");
        descrFigcaption.innerText = activities[i].description;

        const br1 = document.createElement("br");
        const br2 = document.createElement("br");

        newfigure.appendChild(titreFigcaption);
        newfigure.appendChild(image);
        newfigure.appendChild(br1);
        newfigure.appendChild(br2);
        newfigure.appendChild(descrFigcaption);

        container.appendChild(newfigure); 
    }
   
}

// gestion des filtres pour la page des activitÃ©s
function populateFilters() {
    
}

// affiche toutes les activitÃ©s filtrÃ©es pour la page des activitÃ©s
function displayFilteredActivities(filters) {
    
}

function populateForm(activity) 
{
    const urlSearchP = new URLSearchParams(window.location.search);
    const id = urlSearchP.get("id");
    
    activity = activities.find((act) => act.id == id);
    
    const nom = document.getElementById("nom_activite");
    const description = document.getElementById("description");
    const urlImage = document.getElementById("lien_image");
    const niveau = document.getElementById("niveau");
    const coach = document.getElementById("coach");
    const horaire = document.getElementById("horaire");
    const lieu = document.getElementById("lieu");


    if (id) 
    {
        nom.value = activity.name;
        description.value = activity.description;
        urlImage.value = activity.image;
        niveau.value = activity.level;
        coach.value = activity.coach;
        horaire.value = activity.schedule_time;
        lieu.value = activity.location;
    }
   
}

document.addEventListener("DOMContentLoaded", () => 
{   
    const boiteActivite = document.getElementsByClassName("boiteActivite");

    for (let i = 0; i < boiteActivite.length; i++) 
    {
        const boutons = boiteActivite[i].getElementsByTagName("button")[0];

        if (boutons) 
        {
            boutons.addEventListener("click", (evenement) => 
            {
                evenement.preventDefault();
            
                if (activities[i]) 
                {
                    window.location.href = `PageFormulaire.html?id=${activities[i].id}`;
                }
            
            });

        }

    }

    
    
    displayPopularActivities();
    populateForm();
    displayFilteredActivities(); 
    populateFilters();
});
