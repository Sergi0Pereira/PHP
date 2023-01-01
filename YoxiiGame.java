import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.FlowLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

public class YoxiiGame extends JFrame implements ActionListener {

    private int[][] board;
    private int playerTurn;
    private int currVal;
    private int row;
    private int col;
    private JButton[][] buttons;
    private JLabel status;
    private JPanel boardPanel;

    public YoxiiGame() {
        super("Yoxii");
        this.setSize(800, 800);
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setLocationRelativeTo(null);

        board = new int[5][5];
        buttons = new JButton[5][5];
        playerTurn = 1;
        currVal = 1;
        row = 0;
        col = 0;

        status = new JLabel("Player 1 turn");
        JPanel controlPanel = new JPanel(new FlowLayout());
        controlPanel.add(status);

        boardPanel = new JPanel(new GridLayout(5, 5));
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                board[i][j] = 0;
                buttons[i][j] = new JButton();
                buttons[i][j].setPreferredSize(new Dimension(100, 100));
                buttons[i][j].addActionListener(this);
                boardPanel.add(buttons[i][j]);
            }
        }

        this.add(boardPanel, BorderLayout.CENTER);
        this.add(controlPanel, BorderLayout.SOUTH);
        this.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        JButton button = (JButton) e.getSource();
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                if (button == buttons[i][j]) {
                    row = i;
                    col = j;
                }
            }
        }

        board[row][col] = currVal;
        button.setBackground(playerTurn == 1 ? Color.BLUE : Color.RED);
        button.setText("" + currVal);
        button.setEnabled(false);
        currVal++;

        if (playerTurn == 1) {
            status.setText("Player 2 turn");
            playerTurn = 2;
        } else {
            status.setText("Player 1 turn");
            playerTurn = 1;
        }
    }

    public static void main(String[] args) {
        new YoxiiGame();
    }
}