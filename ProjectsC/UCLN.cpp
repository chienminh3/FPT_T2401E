#include <stdio.h>
#include <math.h>

int main() {
	int number1, number2, r;
	printf("enter integer number: ");
	scanf("%d", &number1);
	printf("\nenter integer number 2: ");
	scanf("%d", &number2);
	int temp1, temp2;
	temp1 = number1;
	temp2 = number2;
	if (number1 > number2) {
		r = number1 % number2;
		if (r==0) {
			printf("\nCommon convention of %d and %d is: %d", temp1, temp2, number2);
		}else {
			while (r != 0) {
				number1 = number2;
				number2 = r;
				r = number1 % number2; 
			}
			printf("\nCommon convention of %d and %d is: %d", temp1, temp2, number2);
		}
	}else {
		r = number2 % number1;
		if (r == 0) {
			printf("\nCommon convention of %d and %d is: %d", temp1, temp2, number1);
		}else {
			while (r != 0) {
				number2 = number1;
				number1 = r;
				r = number2  % number1; 
			}
			printf("\nCommon convention of %d and %d is: %d", temp1, temp2, number1);
		}
	}
}
