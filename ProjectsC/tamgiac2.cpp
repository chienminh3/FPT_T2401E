#include <stdio.h>

int main() {
	int edge;
	printf("enter edge: ");
	scanf("%d", &edge);
	
	for (int i = 1; i <= edge; i++) {
		for (int j = edge; j >= i; j--) {
			printf("* ");
		}
		printf("\n");
	}
}
