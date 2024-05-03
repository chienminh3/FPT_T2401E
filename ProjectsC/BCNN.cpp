#include <stdio.h>

int main() {
	int number1, number2, r, LCM;
	printf("enter number1: ");
	scanf("%d", &number1);
	printf("\nenter number2: ");
	scanf("%d", &number2);
	int temp1, temp2;
	temp1 = number1;
	temp2 = number2;
	if (number1 > number2) {
		r = number1 % number2;
		while (r != 0) {
			number1 = number2;
			number2 =  r;
			
			r = number1 % number2;
		}
		LCM = temp1 * temp2 / number2;
		printf("\nLeast common of %d and %d is: %d", temp1, temp2, LCM);
	}else {
		r = number2 % number1;
		while (r != 0) {
			number2 = number1;
			number1 = r;
			
			r = number2 % number1;
		}
		LCM = temp2 * temp1 / number1;
		printf("\nLeast common of %d and %d is: %d", temp2, temp1, LCM);
	}
}
