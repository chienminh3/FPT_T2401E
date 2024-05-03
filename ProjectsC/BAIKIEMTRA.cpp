#include <stdio.h>

//check is prime
void isPrime(int n, int m) {
	printf("The prime numbers between %d and %d:\n", n, m);
	int flag = 1;
	for (int number = n; number <= m; number++) {
		if (number >= 2) {
			for (int j = 2; j*j <= number; j++) {
			if (number % j == 0) {
				flag -= 1;
				break;
				}
			}
		}
		if (flag == 1 && number < 2) {
			flag -= 1;
			
		}
		if (flag == 1) {
			printf("%d\n", number);
		}
		if (flag != 1) {
			flag += 1;
		}
	}
}

int main() {
	int number1, number2;
	printf("Please, enter a number\n");
	printf("+ n: ");
	scanf("%d", &number1);
	printf("+ m: ");
	scanf("%d", &number2);
	isPrime(number1, number2);
}
