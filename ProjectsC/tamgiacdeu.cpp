#include <stdio.h>

int main() {
	int edge;
	printf("enter edge: ");
	scanf("%d", &edge);
	
	for (int i = 1; i <= edge; i++) {
		for (int j = 1; j <= edge-i; j++) {
			printf(" ");
		}
		for (int j = 1; j <= i; j++) {
			printf("* ");
		}
		printf("\n");
	}
}
