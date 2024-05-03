#include <stdio.h>
#include <stdbool.h>

bool isPrime (int n) { 
	if (n <= 1) {
		return false;
	}
	for (int i = 2; i*i <= n; i++) {
		if (n % i == 0) {
			return false;
		}
	}
	return true;
}

void checkPrime (int arr[], int size) {
	int sum;
	for (int i = 0; i < size; i++) {
		if (isPrime(arr[i])) { 
			sum += arr[i];
		}
	}
	printf("%d\n", sum);
}
 
int main() {
	int n;
	printf("Nhap vao size cua mang: ");
	scanf("%d", &n);
	int array[n];
	printf("\n");
	for (int i = 0; i < n; i++) {
		printf("Nhap gia tri thu %d: ", i);
		scanf("%d", &array[i]);
	}
	
	//sap xep mang giam dan
	int tmp;
	for (int i = 0; i < n-1; i++) {
		for (int j = 0; j < n-i-1; j++) {
			if (array[j] < array[j+1]) {
				tmp = array[j];
				array[j] = array[j+1];
				array[j+1] = tmp;
			}
		}
	}
	printf("\n.SAP XEP MANG THEO CHIEU GIAM DAN\n");
	for (int i = 0; i < n; i++) {
		printf("%d", array[i]);
	}
	
	//in ra tong cac so le
	printf("\n\n.TONG CAC SO LE TRONG MANG\n");
	int sum;
	for (int i = 0; i < n; i++) {
		if (array[i]%2 != 0) {
			sum += array[i];
		}
	}
	printf("%d\n", sum);
	
	//in ra tong cac so chan trong mang
	printf("\n.TONG CAC SO CHAN TRONG MANG\n");
	sum = 0;
	for (int i = 0; i < n; i++) {
		if (array[i]%2 == 0) {
			sum += array[i];
		}
	}
	printf("%d\n", sum);
	
	//Tong cac so nguyen to trong mang
	printf("\n.TONG CAC SO NGUYEN TO\n");
	checkPrime(array, n);//truyen mang va kich thuoc vao ham
	
	//tim so lan m xuat hien trong mang
	printf("\n.TIM SO LAN M XUAT HIEN TRONG MANG\n");
	int m, count;
	printf("Nhap vao so m bat ky: ");
	scanf("%d", &m);
	for (int i = 0; i < n; i++) {
		if (m == array[i]) {
			count += 1;
		}
	}
	printf("So lan %d xuat hien trong mang la: %d\n", m, count);
	
	//tinh tong cac phan tu trong mang
	printf("\n.TINH TONG CAC PHAN TU TRONG MANG\n");
	sum = 0;
	for (int i = 0; i < n; i++) {
		sum += array[i];
	}
	printf("%d\n", sum);
	
}
