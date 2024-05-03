#include <stdio.h>

int main() {
	int arrayRange;
	int n[arrayRange];
	printf("enter array range: ");
	scanf("%d", &arrayRange);
	
	int i = 0;
	printf("\nenter integer number %d: ", i);
	scanf("%d", &n[i]);
	
	int max, min;
	max = n[i];
	min = n[i];
	i++;
	
	for (; i < arrayRange; i++) {
		printf("enter integer number %d: ", i);
		scanf("%d", &n[i]);
	}
	
	for (int i = 0; i < arrayRange; i++) {
		if (i != 0) {
			if (max < n[i]) {
				max = n[i];
			}
			if (min > n[i]) {
				min = n[i];
			}
		}
		
	}
	
	printf("Max = %d. Min = %d", max, min);
}
