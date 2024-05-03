#include <stdio.h>

int main() {
	int n, m, max, min;
	printf("enter line number: ");
	scanf("%d", &n);
	printf("\nenter col number: ");
	scanf("%d", &m);
	int array[n][m];
	
	for (int i = 0; i < n; i++) {
		for (int j = 0; j < m; j++) {
			printf("\nenter line %d, col %d:", i, j);
			scanf("%d", &array[i][j]);
		}
	}
	
	for (int i = 0; i < n; i++) {
		for (int j = 0; j < m; j++) {
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
	
	for (int i = 0; i < n; i++) {
		for (int j = 0; j < m; j++) {
			printf("%d ", array[i][j]);
		}
		printf("\n");
	}
	
	printf("\nMax = %d, min = %d", max, min);
}
