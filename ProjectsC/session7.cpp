#include <stdio.h>

int main() {
	int line, col, max, min;
	printf("enter line numbers: ");
	scanf("%d", &line);
	printf("\nenter col numbers: ");
	scanf("%d", &col);
	int array[line][col];
	int sizeA = line * col;
	int array2[sizeA];
	
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			printf("Line %d, col %d: ", i, j);
			scanf("%d", &array[i][j]);
		}
		printf("\n");
	}
	
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			printf("%d ", array[i][j]);
		}
		printf("\n");
	}
	printf("\nmang duoc dao chieu");
	
	int k = 0;
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			array2[k] = array[i][j];
			k++;
		}
	}
	printf("\n");
	
	int tmp, tmp2;
	tmp = sizeA;
	sizeA = sizeA - 1;
	for (int i = 0; i < sizeA; i++) {
		for (int j = 0; j < tmp - i - 1; j++) {
			if (array2[j] > array2[j+1]) {
				tmp2 = array2[j];
				array2[j] = array2[j+1];
				array2[j+1] = tmp2;
			}
		}
	}
	
	k = 0;
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			array[i][j] = array2[k];
			k++;
		}
	}
	
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			printf("%d ", array[i][j]);
		}
		printf("\n");
	}
	
	for (int i = 0; i < line; i++) {
		for (int j = 0; j < col; j++) {
			if (i == 0 && j == 0) {
				max = array[i][j];
				min = array[i][j];
			} else {
				if (max < array[i][j]) {
					max = array[i][j];
				}
				if (min > array[i][j]) {
					min = array[i][j];
				}
			}
		}
	}
	printf("\nMax = %d, Min = %d", max, min);
	
}
