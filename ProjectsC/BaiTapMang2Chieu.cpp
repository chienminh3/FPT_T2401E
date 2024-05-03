#include <stdio.h>
#include <string.h>

#define col 50
int main() {
	int line;
	printf("enter lines number: ");
	scanf("%d", &line);
	getchar();
	char array[line][col];
	
	for (int i = 0; i < line; i++) {
		printf("enter string %d: ", i+1);
		gets(array[i]);
	}
	for (int i = 0; i < line; i++) {
		printf("\nString %d: %s", i+1, array[i]);
	}
}
