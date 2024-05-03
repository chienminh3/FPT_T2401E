#include <stdio.h>
int printfValues(int *a, int *b);
int insertSort (int arr[], int size);

int main() {
	int x = 10, y = 20;
	printf("x = %d , y = %d", x, y);
	printfValues(&x, &y);
	printf("\n\na = %d , b = %d", x, y);
	printf("\n\n");
	
	int array[5] = {9, 0, 13, 4, 7};
	for (int i = 0; i < 5; i++) {
		printf("%d ", array[i]);
	}
	printf("\nmang da duoc sap xep\n");
	insertSort(array, 5);
	for (int i = 0; i < 5; i++) {
		printf("%d ", array[i]);
	}
}

int printfValues(int *a, int *b) {
	int tmp = *a;
	*a = *b;
	*b = tmp;
}

int insertSort (int arr[], int size) {
	for (int j = 1;j < 5; j++) {
		int i = j - 1;
		int tmp = arr[j];
		while ((i >= 0) && (tmp < arr[i])) {
			arr[i+1] = arr[i];
			i--;
		}
		arr[i+1] = tmp; 
	}
}
