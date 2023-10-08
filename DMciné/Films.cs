using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DMciné
{
    public class Films
    {

        private int annee;
        private string genre;
        private int idFilm;
        private string resume;
        private string titre;
        private Acteurs acteurPrin;


        public Films(int annee, string genre, int idFilm, string resume, string titre, Acteurs acteurPrin)
        {
            this.annee = annee;
            this.genre = genre;
            this.idFilm = idFilm;
            this.resume = resume;
            this.titre = titre;
            this.acteurPrin = acteurPrin;


        }

        public int Annee
        {
            get { return annee; }
            set { annee = value; }
        }

        public string Genre
        {
            get { return genre; }
            set { genre = value; }
        }

        public int IdFilm
        {
            get { return idFilm; }
            set { idFilm = value; }
        }

        public string Resume
        {
            get { return resume; }
            set { resume = value; }
        }

        public string Titre
        {
            get { return titre; }
            set { titre = value; }
        }

        public Acteurs ActeurPrin
        {
            get { return acteurPrin; }
            set { acteurPrin = value; }
        }

        public static Films getInstance(int annee, string genre, int idFilm, string resume, string titre, Acteurs acteurPrin)
        {
            return new Films(annee, genre, idFilm, resume, titre, acteurPrin);
        }

        public Acteurs GetActeurPrin()
        {
            return acteurPrin;
        }

        public new string ToString()
        {
            return $"Titre : {titre}\nannee {annee}\ngenre {genre}\nresume {resume}";

        }
    } }
