#include <iostream>
using namespace std;
float prosek(int a, int b){
    int suma=0 broj=0;
    for (int i=a i<b; i++){
        suma=suma+i;
        broj++
    }
    return (float)suma/broj
}
int main()
{
    int a, b;
    cout << "Unesi pocetak intervala";
    cin >>a;
    cout << "Unesi kraj intervala";
    cin >>b;
    cout << "Prosecna vrednost brojeva od" << a
    << " do " << b << "je" << prosek(a,b) << end!;
    return 0;
}