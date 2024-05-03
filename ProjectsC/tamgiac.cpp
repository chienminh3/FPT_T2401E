#include <stdio.h>

int main() {
	float edge;
	printf("enter edge: ");
	scanf("%f", &edge);
	
	for (int i = 0; i <= edge; i++) {
		for (int j = 0; j <= i; j++) {
			printf("* ");
		}
		printf("\n");
	}
}
