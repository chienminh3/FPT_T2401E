#include <stdio.h>
#include <math.h>

int main() {
	int choose;
	printf("\n1. Phuong trinh bac mot");
	printf("\n2. Phuong trinh bac hai");
	printf("\nChon 1-2: ");
	scanf("%d", &choose);
	float a, b, c, x, x1, x2, delta;
	
	if (choose == 1) {
		printf("\nBan vua chon giai phuong trinh bac mot\n");
		printf("Nhap a: ");
		scanf("%f", &a);
		printf("Nhap b: ");
		scanf("%f", &b);
		if (a == 0&&b == 0) {
			printf("\nPhuong trinh vo so nghiem");
		} else if (a != 0) {
			x = -b/a;
			printf("\nPhuong trinh co nghiem duy nhat la: %f", x);
		} else {
			printf("\nPhuong trinh vo nghiem");
		}
	} else if (choose == 2) {
		printf("\nBan vua chon giai phuong trinh bac hai\n");
		printf("Nhap a: ");
		scanf("%f", &a);
		printf("Nhap b: ");
		scanf("%f", &b);
		printf("Nhap c: ");
		scanf("%f", &c);
		
		if ((a != 0) && (b != 0) && (c != 0)) {
		delta = b*b - 4*(a*c);
		if (delta > 0) {
			x1 = -b + sqrt(delta)/(2*a);
			x2 = -b - sqrt(delta)/(2*a);
			printf("\nPhuong trinh co 2 nghiem phan biet");
			printf("\nx1 = %f", x1);
			printf("\nx2 = %f", x2);
		}else if (delta == 0) {
			x = -b/(2*a);
			printf("\nPhuong trinh co nghiem kep");
			printf("\nx = %f", x);
		}else {
			printf("\nPhuong trinh vo nghiem");
		}
	}
	} else {
		printf("Chon sai thoat chuong trinh!");
	}
}
