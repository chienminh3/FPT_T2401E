#include <stdio.h>

int main() {
	int edge;
	printf("enter edge: ");
	scanf("%d", &edge);
	for (int i = 0; i <= edge; i++) {
		for (int j = 0; j <= edge; j++) {
			int temp = edge - i;
			if (j <= temp) {
				printf(" ");
			}else {
				printf("*");
			}
		}
		printf("\n");
	}
	
}
