#include <stdio.h>
#include <math.h>

int main() {
	int a, b, c;
	printf("enter a: ");
	scanf("%d", &a);
	printf("\nenter b: ");
	scanf("%d", &b);
	printf("\nenter c: ");
	scanf("%d", &c);
	
	if (a == 0 || b == 0 || c == 0) {
		printf("Not tam giac.");
		return 0;
	}else {	
		if (a == b && a == c && b == c) {
			printf("Tam giac can.");
		}else if (a == b || b == c || a == c) {
			printf("tam giac deu");
		}else if (pow(a,2) + pow(b,2) == pow(c,2) || pow(a,2) + pow(c,2) == pow(b,2) || pow(b,2) + pow(c,2) == pow(a,2)) {
			printf("Tam giac vuong can.");
		}else {
			printf("tam giac thuong");
		} 
		
	}
}
