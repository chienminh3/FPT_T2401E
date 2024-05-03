#include <stdio.h>

int main() {
	
	int n;
	printf("enter n: ");
	scanf("%d", &n);
	if (n < 2) {
		printf("%d Not prime.", n);
		return 0;
	}
	for (int i = 2; i * i <= n; i++) {
		int temp = n % i;
		if (temp == 0) {
			printf("%d Not prime.", n);
			return 0;
		}
	} 
	printf("%d Is prime", n);
}
