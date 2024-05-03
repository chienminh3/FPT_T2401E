#include <stdio.h>

int main() {
	int n;
	printf("enter n: ");
	scanf("%d", &n);
	
	if (n % 3 == 0 && n % 5 == 0) {
		printf("%d chia het cho 3 vs 5.", n);
	}else {
		printf("%d khong chia het cho 3 va 5.", n);
	}
}
