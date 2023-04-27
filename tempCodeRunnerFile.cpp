/*
Anggota Kelompok Aksara:
- Frengky Saputra (221402021)
- Rifqi Jabrah Rhae(221402031)
- Jessindy Tanuwijaya (221402062)
- Julyant Anggara (221402109)
- Muhammad Ahsanul Kholiqin Lubis (221402115)
*/

#include <iostream>
#include <string>
#define N 5
using namespace std;

class Queue
{
private:
    string queue[N];
    int front;
    int rear;
    string masuk;

public:
    Queue()
    {
        front = -1;
        rear = -1;
    }
    void enqueue()
    {
        if ((rear + 1) % N == front)
        {
            cout << "Antrian Penuh" << endl;
        }
        else if ((front == -1) && (rear = -1))
        {
            cout << "Masukkan pesanan\t: ";
            getline(cin>>ws,masuk);
            
            front = rear = 0;
            queue[rear] = masuk;
            cout <<"Sipp, antrian berhasil dimasukkan"<<endl;
        }
        else
        {
            cout << "Masukkan pesanan\t: ";
            getline(cin>>ws,masuk);

            rear = (rear + 1) % N;
            queue[rear] = masuk;
            cout<<"Sipp, antrian berhasil dimasukkan"<<endl;
        }
    }
    void dequeue()
    {
        if ((front == -1) && (rear = -1))
        {
            cout << "Semua pesanan Anda telah selesai, Terima kasih telah menggunakan jasa kami" << endl;
        }
        else if (front == rear)
        {
            front = rear = -1;
            cout<<"1 pesanan telah selesai, silahkan diambil di counter restoran";
        }
        else
        {
            front = (front + 1) % N;
            cout<<"1 pesanan telah selesai, silahkan diambil di counter restoran";
        }
    }

    void display()
    {
        int i;
        if ((front == -1) && (rear = -1))
        {
            cout << "Antrian Kosong nih" << endl;
        }
        else
        {
            cout<<"Antrian saat ini adalah\t:"<<endl;
            for (i = front; i < rear + 1; i++)
            {
                cout <<"-"<<queue[i]<<endl;
            }
        }
    }
};

int main()
{
    Queue andi;
    int choice;
    while (1)
    {
        cout << "---------------------" << endl;
        cout << "RESTO AKSARA APP" << endl;
        cout << "---------------------" << endl;
        cout << "Pilihlah salah satu menu dibawah ini" << endl;
        cout << "1. Pesan Makanan" << endl;
        cout << "2. Ambil Pesanan" << endl;
        cout << "3. Lihat antrian terkini" << endl;
        cout << "4. Exit" << endl;
        cout << "Masukkan pilihan\t: ";
        cin>>ws;
        cin >> choice;

        switch (choice)
        {
        case 1:
            andi.enqueue();
            break;
        case 2:
            andi.dequeue();
            break;
        case 3:
            andi.display();
            break;
        case 4:
            exit(1);
        default:
            cout << "Menu belum tersedia"<<endl;
            break;
        }
    }
    return 0;
}
