#include <stdio.h>
#include <math.h>

int main () {
	int a, b, c, delta;
	float x1, x2, x;
	printf("enter a: ");
	scanf("%d", &a);
	printf("\nenter b: ");
	scanf("%d", &b);
	printf("\nnenter c: ");
	scanf("%d", &c);
	
	if ((a != 0) && (b != 0) && (c != 0)) {
		delta = b*b - 4*(a*c);
		if (delta > 0) {
			x1 = -b + sqrt(delta)/(2*a);
			x2 = -b - sqrt(delta)/(2*a);
			
			printf("\n2 solution.");
			printf("\nValue of x1 = %.1f", x1);
			printf("\nValue of x2 = %.1f", x2);
		}else if (delta == 0) {
			x = -b/(2*a);
			
			printf("\n1 solution.");
			printf("\nValue of double x = %.1f", x);
		}else {
			printf("\nNo solution.");
		}
	}
	
}
