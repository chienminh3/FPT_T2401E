#include <stdio.h>

int main() {
	int h, c;
	printf("enter h: ");
	scanf("%d", &h);
	printf("\nenter c: ");
	scanf("%d", &c);
	getchar();
	
	char array[h][c];
	for (int i = 0; i < h; i++) {
		for (int j = 0; j < c; j++) {
			printf("\nenter line %d, col %d: ", i, j);
			scanf("%c", &array[i][j]);
			getchar();
		}
		printf("\n");
	}
	//output
	for (int i = 0; i < h; i++) {
		for (int j = 0; j < c; j++) {
			printf("%c", array[i][j]);
		}
		printf("\n");
	}
}
