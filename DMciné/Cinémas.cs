using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection.Metadata.Ecma335;
using System.Text;
using System.Threading.Tasks;

namespace DMciné
{
    public class Cinémas
    {
        private List<Acteurs> LesActeurs;
        private List<Films> LesFilms;

        public Cinémas() 
        {
            this.LesActeurs = new List<Acteurs>();
            this.LesFilms = new List<Films>();
        }

        public static Cinémas GetInstance()
        {
            return new Cinémas();
        }

        public void AjouterActeurs(Acteurs acteurs)
        {
            LesActeurs.Add(acteurs);
        }

        public void AjouterFilms(Films films)
        { 
            LesFilms.Add(films);
        }

        public Acteurs GetActeurs(int id)
        {
            foreach (Acteurs acteurs in LesActeurs)
            {
                if (acteurs.Id == id)
                {
                    return acteurs;
                }
            }return null;
        }

        public Films GetFilms(int id)
        {
            foreach(Films films in LesFilms)
            {
                if(films.IdFilm == id)
                {
                    return films;
                }
            }return null;
        }

        public int NbActeurs(){return LesActeurs.Count;}

        public int NbFilms() { return LesFilms.Count; }
        
    }
}
