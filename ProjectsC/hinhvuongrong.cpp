#include <stdio.h>

int main() {
	int edge;
	printf("enter edge: ");
	scanf("%d", &edge);
	
	for (int i = 1; i <= edge; i++) {
		for (int j = 1; j <= edge; j++) {
			if (i == 1 || i == edge) {
				printf("*");
			}
			if (i > 1 && i < edge) {
				if (j == 1 || j == edge) {
					printf("*");
				}
				if (j > 1 && j < edge) {
					printf(" ");
				}
			}
		}
		printf("\n");
	}
	
}
