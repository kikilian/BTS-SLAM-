using DMciné;
using System;

public class Program
{
    public void Main()
    {
        Films newFilm = Films.getInstance(2008, "Thriller", 1, "Batman est plus que jamais déterminé à éradiquer le crime organisé qui sème la terreur en ville. Epaulé par le lieutenant Jim Gordon et par le procureur de Gotham City, Harvey Dent, Batman voit son champ d'action s'élargir. La collaboration des trois hommes s'avère très efficace et ne tarde pas à porter ses fruits jusqu'à ce qu'un criminel redoutable vienne plonger la ville de Gotham City dans le chaos.", "The Dark Knight", 1);
        Console.WriteLine(newFilm.ToString());

        Acteurs newActeur = Acteurs.getInstance(1,"Christian", "Bale",1974);
        Console.WriteLine(newActeur.ToString());


    }
}