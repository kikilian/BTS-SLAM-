using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DMciné
{
    public class Acteurs
    {
        private int id;
        private string prenom;
        private string nom;
        private int anneeNaiss;

        public Acteurs (int id, string prenom, string nom, int anneeNaiss)
        {
            this.id = id;
            this.prenom = prenom;
            this.nom = nom;
            this.anneeNaiss = anneeNaiss;
        }

        public int Id
        {
            get { return id; }
            set { id = value; }
        }

        public string Prenom
        {
            get { return prenom; }
            set { prenom = value; }
        }

        public string Nom
        {
            get { return nom; }
            set { nom = value; }
        }

        public int AnneeNaiss
        {
            get { return anneeNaiss; }
            set { anneeNaiss = value; }
        }



        public static Acteurs getInstance(int id, string prenom, string nom, int anneeNaiss)
        {
            return new Acteurs(id, prenom, nom, anneeNaiss);
        }

        public new string ToString()
        {
            return $"nom  {nom} prenom  {prenom} anneeNaiss  {anneeNaiss}";
        }


    }

}
