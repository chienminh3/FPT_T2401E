#include <stdio.h>

int main() {
	int szArray;
	printf("enter size array: ");
	scanf("%d", &szArray);
	int array[szArray];
	int arrayReverse[szArray]; 
	int j = szArray;
	
	for (int i = 0; i < szArray; i++) {
		printf("\nenter integer numbers %d: ", i);
		scanf("%d", &array[i]);
		arrayReverse[j] = array[i];
		j--;
	}
	
	for (int i = 0; i < szArray; i++) {
		printf("%d ",array[i]);
	}
	
	printf("\n");
	for (int i = 1; i <= szArray; i++) {
		printf("%d ", arrayReverse[i]);
	}
}
